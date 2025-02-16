 <details class="faq_item">
        <summary class="faq_title">{{ $faq->question }}</summary>
        <div class="faq_content">
            <p>{{ $faq->answer }}</p>
            <div class="has-text-right is-flex is-flex-direction-column gap-2">
                <a href="{{ route('faq.edit', $faq->id) }}" class="button is-primary">Edit</a>

                <!-- Unique Delete Button -->
                <button id="deleteBtn{{ $faq->id }}" class="button is-danger">Delete</button>

                <!-- Unique Modal -->
                <div id="deleteModal{{ $faq->id }}" class="modal">
                    <div class="modal-content">
                        <span class="close closeBtn" data-id="{{ $faq->id }}">&times;</span>
                        <p class="has-text-centered">ARE YOU SURE YOU WANT TO DELETE????????</p>
                        <div class="level">
                            <form action="{{ route('faq.delete', $faq->id) }}" method="POST">
                                @csrf
                                @method('DELETE')
                                <button type="submit" class="button is-danger">Delete</button>
                            </form>
                            <button class="button is-primary closeBtn" data-id="{{ $faq->id }}">NO</button>
                        </div>
                    </div>
                </div>
            </div>
        </div>
 </details>

