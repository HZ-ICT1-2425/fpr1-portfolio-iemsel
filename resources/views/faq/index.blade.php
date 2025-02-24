<x-layout.main>
    <h1 class="faqs">Frequently Asked Questions</h1>
    <hr>
    <section class="faqs starbg">
        @foreach($faqs as $faq)
            <x-faq.faq-item :faq="$faq"></x-faq.faq-item>
        @endforeach
        <hr>
            <a href="{{ route('faq.create') }}" class="button is-primary">Create a New FAQ</a>
        <hr>
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
