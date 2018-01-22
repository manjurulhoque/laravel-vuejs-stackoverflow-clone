<template>
    <div>
        <form action="" method="post">
            <input type="hidden" class="hidden" value=""/>
            <div id="topic" class="upvote">
                <a @click="upvote"
                   :class="{upvoted: upvoted}"
                   class="upvote up" title="This is good stuff. Vote it up! (Click again to undo)">

                </a>
                <span class="count" id="count" name="vote">&nbsp;33</span>
                <a class="downvote" title="This is not useful. Vote it down. (Click again to undo)">
                </a>
                <a class="star" :class="{starred: favorited}" @click="starred"
                   title="Mark as favorite. (Click again to undo)">
                </a>
            </div>
        </form>
    </div>
</template>

<script>
    import axios from 'axios';
    export default {
        props: ['id'],
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
                console.log(`upvote`);
                axios.post(`/upvote`, {question_id: this.id})
                    .then(res => {
                        this.upvoted = true;
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
