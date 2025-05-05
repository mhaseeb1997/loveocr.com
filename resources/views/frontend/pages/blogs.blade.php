@extends('.frontend.main')
@section('section')
<main class="container">
    <section class="hero">
        <h1>Love OCR Blog</h1>
        <p>Latest news, tips, and insights about OCR technology and document processing</p>
    </section>

    <!--========================
            Blog Posts Section  
        ========================= -->
    <section class="blog-posts">
        <div class="posts-grid">
            <!-- Blog 1 -->
            <article class="blog-post">
                <div class="post-image">
                    <img src="{{asset('web_assets/frontend/images/blogs-img/Ease_your_writin.png')}}" alt="Document Scanning">
                    <div class="post-date">April 28, 2023</div>
                </div>
                <div class="post-content">
                    <div class="post-category">Tips & Tricks</div>
                    <h3><a href="{{ route('blog-detail') }}">How you can Ease your writing by using the OCR tool?</a></h3>
                    <p class="post-excerpt">Learn professional techniques to improve OCR accuracy and get cleaner text extraction from your documents and images...</p>
                    <a href="{{ route('blog-detail') }}" class="read-more">Read More <i class="fas fa-arrow-right"></i></a>
                </div>
            </article>

            <!-- Blog 2 -->
            <article class="blog-post">
                <div class="post-image">
                    <img src="{{asset('web_assets/frontend/images/blogs-img/What_is_Optical_Character_Recognition_(OCR)_and_How_it_Work-min1.png')}}" alt="PDF Files">
                    <div class="post-date">April 15, 2023</div>
                </div>
                <div class="post-content">
                    <div class="post-category">Tutorial</div>
                    <h3><a href="{{ route('blog-detail') }}">What is Optical Character Recognition (OCR) and How does it Work?</a></h3>
                    <p class="post-excerpt">A step-by-step guide to transforming your scanned documents into editable and searchable text files using Love OCR...</p>
                    <a href="{{ route('blog-detail') }}" class="read-more">Read More <i class="fas fa-arrow-right"></i></a>
                </div>
            </article>

            <!-- Blog 3 -->
            <article class="blog-post">
                <div class="post-image">
                    <img src="{{asset('web_assets/frontend/images/blogs-img/11_Important_Uses_of_OCR_Tool_that_Help_you_in_daily_life1.png')}}" alt="Business Productivity">
                    <div class="post-date">March 30, 2023</div>
                </div>
                <div class="post-content">
                    <div class="post-category">Business</div>
                    <h3><a href="{{ route('blog-detail') }}">11 Important Uses of OCR Tool that Help you in daily life</a></h3>
                    <p class="post-excerpt">Discover how implementing OCR solutions can save your company time and money by automating document processing workflows...</p>
                    <a href="{{ route('blog-detail') }}" class="read-more">Read More <i class="fas fa-arrow-right"></i></a>
                </div>
            </article>

            <!-- Blog 4 -->
            <article class="blog-post">
                <div class="post-image">
                    <img src=" {{asset('web_assets/frontend/images/blogs-img/How_Does_OCR_Extract_Text_from_Images-min.png')}}">
                    <div class="post-date">March 18, 2023</div>
                </div>
                <div class="post-content">
                    <div class="post-category">Technology</div>
                    <h3><a href="{{ route('blog-detail') }}">How Does OCR Extract Text from Images?</a></h3>
                    <p class="post-excerpt">Why is handwriting so difficult for computers to read? We examine the technical hurdles and recent breakthroughs in handwritten text recognition...</p>
                    <a href="{{ route('blog-detail') }}" class="read-more">Read More <i class="fas fa-arrow-right"></i></a>
                </div>
            </article>
        </div>
    </section>

    <!--========================
            Newsletter Section  
        ========================= -->
    <section class="newsletter">
        <div class="newsletter-content">
            <h2>Stay Updated with Our Latest Posts</h2>
            <p>Subscribe to our newsletter to receive the newest articles and OCR tips directly in your inbox.</p>
            <form class="newsletter-form">
                <input type="email" placeholder="Your email address" required>
                <button type="submit" class="subscribe-btn">Subscribe</button>
            </form>
        </div>
    </section>
</main>
@endsection