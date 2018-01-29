<template>
    <div>
        <form action="" method="post">
            <input type="hidden" class="hidden" value=""/>
            <div id="topic" class="upvote">
                <a @click="upvote"
                   :class="{upvoted: upvoted}"
                   class="upvote up" title="This is good stuff. Vote it up! (Click again to undo)">

                </a>
                <span class="count" id="count" name="vote">&nbsp; 0</span>
                <a @click="downvote" :class="{downvoted: downvoted}" class="downvote"
                   title="This is not useful. Vote it down. (Click again to undo)">
                </a>
                <a class="star" :class="{starred: favorited}" @click="starred"
                   title="Mark as favorite. (Click again to undo)">
                </a>
                <h4>{{total_star}} stars</h4>
            </div>
        </form>
    </div>
</template>

<script>
    import axios from 'axios';
    export default {
        props: ['id', 'whom_question', 'total_star'],
        data() {
            return {
                upvoted: false,
                downvoted: false,
                favorited: false
            }
        },
        mounted() {
            this.check_vote();
            this.check_favorite();
        },
        methods: {
            upvote() {
                this.favorited = true;
                axios.post(`/upvote`, {question_id: this.id, whom_question: this.whom_question})
                    .then(res => {
                        if (this.downvoted === true) {
                            this.downvoted = false;
                        }
                        this.upvoted = true;
                    })
                    .catch(err => {
                        console.log(err);
                    });
            },
            downvote() {
                this.favorited = true;
                console.log(`downvote`);
                axios.post(`/downvote`, {question_id: this.id, whom_question: this.whom_question})
                    .then(res => {
                        if (this.upvoted === true) {
                            this.upvoted = false;
                        }
                        this.downvoted = true;
                    })
                    .catch(err => {
                        console.log(err);
                    });
            },
            check_vote() {
                axios.get(`/check_vote/${this.id}`)
                    .then(res => {
                        let data = res.data;
                        if (data.status === 'ok') {
                            if (data.upvote === true && data.downvote === false) {
                                this.upvoted = true;
                            }
                            else if (data.upvote === false && data.downvote === true) {
                                this.downvoted = true;
                            }
                        }
                    })
                    .catch(err => {
                        console.log(err)
                    });
            },
            check_favorite() {
                axios.get(`/check_favorite/${this.id}`)
                    .then(res => {
                        if (res.data.status === 'ok' && res.data.favorite === true) {
                            this.favorited = true;
                        }
                    })
                    .catch(err => {
                        console.log(err)
                    });
            },
            starred() {
                if (!this.favorited) {
                    this.favorite();
                }
                else {
                    this.unfavorite();
                }
            },
            favorite() {
                axios.post('/favorite', {question_id: this.id})
                    .then(res => {
                        if (res.data.status === 'success') {
                            this.favorited = true;
                        }
                    })
                    .catch(err => {
                        console.log(err)
                    });
            },
            unfavorite() {
                axios.post('/unfavorite', {question_id: this.id})
                    .then(res => {
                        this.favorited = false;
                    })
                    .catch(err => {
                        console.log(err)
                    });
            }
        }
    }
</script>
