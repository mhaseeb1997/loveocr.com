<script>
    // Toggle mobile navigation
    const navToggle = document.querySelector('.nav-toggle');
    const nav = document.querySelector('nav');

    navToggle.addEventListener('click', () => {
        nav.classList.toggle('active');
    });

    // Close nav when clicking on a link (for mobile)
    const navLinks = document.querySelectorAll('nav ul li a');
    navLinks.forEach(link => {
        link.addEventListener('click', () => {
            nav.classList.remove('active');
        });
    });

    // File upload functionality
    const fileInput = document.getElementById('file-input');
    const selectFileBtn = document.getElementById('selectFileBtn');
    const uploadArea = document.getElementById('uploadArea');
    const fileInfo = document.getElementById('fileInfo');
    const fileName = document.getElementById('fileName');
    const removeFile = document.getElementById('removeFile');

    // Handle file selection via button
    selectFileBtn.addEventListener('click', () => {
        fileInput.click();
    });

    // Handle file selection
    fileInput.addEventListener('change', (e) => {
        if (e.target.files.length > 0) {
            const file = e.target.files[0];
            displayFileInfo(file);
        }
    });

    // Handle drag and drop
    uploadArea.addEventListener('dragover', (e) => {
        e.preventDefault();
        uploadArea.classList.add('active');
    });

    uploadArea.addEventListener('dragleave', () => {
        uploadArea.classList.remove('active');
    });

    uploadArea.addEventListener('drop', (e) => {
        e.preventDefault();
        uploadArea.classList.remove('active');

        if (e.dataTransfer.files.length > 0) {
            const file = e.dataTransfer.files[0];
            fileInput.files = e.dataTransfer.files;
            displayFileInfo(file);
        }
    });

    // Display file information
    function displayFileInfo(file) {
        fileName.textContent = file.name;
        fileInfo.style.display = 'block';
        uploadArea.classList.add('active');
    }

    // Remove selected file
    removeFile.addEventListener('click', (e) => {
        e.stopPropagation();
        fileInput.value = '';
        fileInfo.style.display = 'none';
        uploadArea.classList.remove('active');
    });
</script>
