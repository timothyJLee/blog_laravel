
<title>My Awesome Blog</title>
<body>
<div id="wrapper">
<header>
<p>All Blog Entries...</p>
</header>
<section id="main">
<section id="content">
@foreach($posts as $post)
<article>
<h2>{{ $post->title }}</h2>
<p>{{ $post->body }}</p>
<p><small>Posted by <b>Timothy Lee</b> at <b>{{ $post->created_at }}</b></small></p>
@include('makecomment')
</article>
@endforeach
{{ $posts->links() }}
</section>
</section>
<footer>
<section id="footer-area">
<section id="footer-outer-block">
<aside class="footer-segment">
<h4>Timothy Lee's Blog</h4>
</aside>
</section>
</section>
</footer>
</div>
</body>
</html>
