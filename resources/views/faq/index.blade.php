<x-layout.main>
    <style>
        body {font-family: Arial, Helvetica, sans-serif;}

        /* The Modal (background) */
        .modal {
            display: none; /* Hidden by default */
            position: fixed; /* Stay in place */
            z-index: 1; /* Sit on top */
            padding-top: 100px; /* Location of the box */
            left: 0;
            top: 0;
            width: 100%; /* Full width */
            height: 100%; /* Full height */
            overflow: auto; /* Enable scroll if needed */
            background-color: rgb(0,0,0); /* Fallback color */
            background-color: rgba(0,0,0,0.4); /* Black w/ opacity */
        }

        /* Modal Content */
        .modal-content {
            background-color: #2C2C34;
            margin: auto;
            padding: 20px;
            border: 1px solid #888;
            width: 40%;
        }

        /* The Close Button */
        .close {
            color: #aaaaaa;
            float: right;
            font-size: 28px;
            font-weight: bold;
        }

        .close:hover,
        .close:focus {
            color: #000;
            text-decoration: none;
            cursor: pointer;
        }
    </style>
    <h1 class="faqs">Frequently Asked Questions</h1>
    <hr>
    <section class="faqs starbg">
        <details class="faq_item">
            <summary class="faq_title">How can you print a document from your laptop at HZ?</summary>
            <p class="faq_content">You go to <a href="https://print.hz.nl" target="_blank" rel="noopener noreferrer">print hz</a> and follow the instructions there.</p>
        </details>

        @foreach($faqs as $faq)
            <x-faq.faq-item :faq="$faq"></x-faq.faq-item>
        @endforeach
            <a href="{{ route('faq.create') }}" class="button is-primary">Create a New FAQ</a>
    </section>
    <script>
        document.addEventListener("DOMContentLoaded", function () {
            document.querySelectorAll("[id^='deleteBtn']").forEach((button) => {
                button.addEventListener("click", function () {
                    const id = this.id.replace("deleteBtn", ""); // Extract FAQ ID
                    document.getElementById("deleteModal" + id).style.display = "block";
                });
            });

            document.querySelectorAll(".closeBtn").forEach((button) => {
                button.addEventListener("click", function () {
                    const id = this.dataset.id; // Get ID from data attribute
                    document.getElementById("deleteModal" + id).style.display = "none";
                });
            });

            window.addEventListener("click", function (event) {
                document.querySelectorAll("[id^='deleteModal']").forEach((modal) => {
                    if (event.target === modal) {
                        modal.style.display = "none";
                    }
                });
            });
        });
    </script>
</x-layout.main>
