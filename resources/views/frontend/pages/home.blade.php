@extends('.frontend.main')
@section('section')
    <main class="container">
        <section class="hero">
            <h1>Free Online OCR</h1>
            <p>Extract text from images, PDFs, and Documents with one click.</p>
        </section>

        <!--========================
            Upload file Section
        ========================= -->
        <section class="upload-area" id="uploadArea">
            <div class="upload-icon">↑</div>
            <h2>Drag & Drop files here to upload</h2>
            <p>or</p>
            <input type="file" id="file-input" accept=".pdf,.jpg,.jpeg,.png,.doc,.docx">
            <button class="upload-btn" id="selectFileBtn">Select File from Device</button>
            <div class="file-info" id="fileInfo" style="display: none;">
                <span class="file-name" id="fileName"></span>
                <span class="remove-file" id="removeFile">✕</span>
            </div>
        </section>
        <button id="submitBtn" class="">Convert</button>

        <div class="result-area">
            <textarea id="ocrText" placeholder="Result will be appear here..." rows="6"  style="width: 100%; margin-top: 20px;"></textarea>
        </div>
        <!--========================
           How It Works Section
        ========================= -->
        <section class="how-it-works">
            <h2><i class="fas fa-question-circle info-icon"></i>How to use Free online OCR converter?</h2>
            <p class="text-center mb-2">We are going to discuss that how you can use this Love OCR online free tool to
                extract text from images and PDFs:</p>
            <div class="steps">
                <div class="step">
                    <div class="step-icon"><i class="fas fa-file-upload"></i></div>
                    <h3>Step 1</h3>
                    <p>Drag and drop image to the input field</p>
                </div>
                <div class="step">
                    <div class="step-icon"><i class="fas fa-folder-open"></i></div>
                    <h3>Step 2</h3>
                    <p>Or you can also upload a file from your device</p>
                </div>
                <div class="step">
                    <div class="step-icon"><i class="fas fa-robot"></i></div>
                    <h3>Step 3</h3>
                    <p>Verify the reCAPTCHA</p>
                </div>
                <div class="step">
                    <div class="step-icon"><i class="fas fa-exchange-alt"></i></div>
                    <h3>Step 4</h3>
                    <p>Click on the <strong>Convert</strong> button</p>
                </div>
                <div class="step">
                    <div class="step-icon"><i class="fas fa-file-alt"></i></div>
                    <h3>Step 5</h3>
                    <p>You'll get the editable text</p>
                </div>
                <div class="step">
                    <div class="step-icon"><i class="fas fa-download"></i></div>
                    <h3>Step 6</h3>
                    <p>You can copy the text or download it as a docx or .txt file</p>
                </div>
            </div>
        </section>

        <!--========================
                Info Section
        ========================= -->

        <section class="info-section">
            <h2>What is Love OCR?</h2>
            <p>Love OCR is an AI-based tool that converts images & PDFs into editable text accurately. Use this online
                free OCR converter to extract text from images for free. With this OCR converter online, you can convert
                image to text at one click and its totally free.</p>
        </section>

        <section class="info-section">
            <h2>What is an online OCR translator?</h2>
            <p>Online OCR translator is a tool that allows you to translate images, PDFs, and documents into text for
                free. It compares objects from the image with objects from the tool's database at a microscopic level.
                Our Image OCR tool takes advantage of advanced OCR technology to make comparisons. Its core recognition
                program is powered by two of the best machine-learning libraries, TensorFlow and Scikit-learn.</p>
            <p class="mt-1">There were the times when we needed to retrieve data from the images and the process of
                writing every word from an image was a hectic task. AI OCR online tool is developed as a solution to
                this problem. All you need to do is upload the specified image, and this OCR photo to text converter
                will convert it to text in a matter of seconds.</p>
        </section>

        <section class="info-section">
            <h2>Why do we need online OCR converter?</h2>
            <p>Using an AI online OCR free tool for OCR picture to text conversion improves the process of automation.
                It makes our tasks more hassle-free as well as error-free. The tool will help decrease your efforts and
                increase your productivity especially when you have to convert bulk images to text. The good thing about
                image to free car online converter is that you can convert photos to text by just uploading the OCR
                image online with a single click. This OCR free online converter provides a simple interface for
                converting image to text. Credit should be given where it's due, our dedicated team of developers did an
                outstanding job by developing the recognition algorithms to achieve 100% accuracy.</p>
        </section>
    </main>
@endsection
