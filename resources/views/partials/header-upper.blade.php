<section class="container">
    <div class="col-md-12">
        <nav class="navbar-header">
            <div class="img-responsive">
                <a href="home.html" class="navbar-brand">
                    <img src="{{ asset("images/logo.png") }}" width="100%"/>
                </a>
            </div>
        </nav>
        <div class="navbar-form navbar-right">
            <button class="btn btn-link">
                <a href="#" class="btn btn-default active" role="button">Questions</a>
                <a href="{{ route('tags') }}" class="btn btn-default active" role="button">Tags</a>
                <a href="#" class="btn btn-default active" role="button">Users</a>
                <a href="#" class="btn btn-default active" role="button">Badges</a>
                <a href="#" class="btn btn-default active" role="button">Unanswered</a>
                <a href="{{ route('questions.create') }}" class="btn btn-default active" role="button">Ask Question</a>
            </button>
        </div>
    </div>
</section>