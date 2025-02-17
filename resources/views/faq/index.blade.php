<x-layout.main>
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
