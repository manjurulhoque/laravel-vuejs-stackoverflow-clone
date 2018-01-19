<template>
    <div>
        <form action="" method="post">
            <input type="hidden" class="hidden" value=""/>
            <div id="topic" class="upvote">
                <a class="upvote up upvoted"
                   title="This is good stuff. Vote it up! (Click again to undo)"></a>
                <span class="count" id="count" name="vote">&nbsp;33</span>
                <a class="downvote downvoted" title="This is not useful. Vote it down. (Click again to undo)">
                </a>
                <a class="star starred" title="Mark as favorite. (Click again to undo)">
                </a>
            </div>
        </form>
    </div>
</template>

<script>
    export default {
        mounted() {
            console.info('Component mounted.')
        }
    }
</script>
