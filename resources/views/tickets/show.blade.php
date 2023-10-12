<x-main>
    <div class="container">
        <div class="row mt-4">
            <div class="mt-3">
                <div class="d-flex justify-content-between align-items-center">
                    <h2 class="fw-bold fs-2">
                        {{ $ticket['subject'] }}
                    </h2>
                    <a href="{{ route('tickets') }}" class="btn btn-outline-primary text-uppercase">Area Tickets</a>
                </div>
                <span class="lead">Priorità: </span>
                {{-- Controllo di priorità --}}
                @if ($ticket['priority'] === 'alta')
                    <span class="text-danger fw-bold text-capitalize fs-5">{{ $ticket['priority'] }}</span>
                @elseif ($ticket['priority'] === 'media')
                    <span class="text-warning fw-bold text-capitalize fs-5">{{ $ticket['priority'] }}</span>
                @else
                    <span class="text-success fw-bold text-capitalize fs-5">{{ $ticket['priority'] }}</span>
                @endif
            </div>
            <div class="mt-2 lead">
                Email: <span class="text-primary">{{ $ticket['email'] }}</span>
            </div>
            <div class="mt-2 lead">
                {{ $ticket['content'] }}
            </div>
            {{-- Form --}}
            <div class="mt-2">
                <form action="{{ route('tickets.answer') }}" method="POST">
                    @csrf
                    <h3 class="lead fs-3">Rispondi:</h3>
                    <input type="hidden" name="email" value="{{ $ticket['email'] }}">
                    <textarea name="response" id="response" rows="6" class="form-control"></textarea>
                    <div class="mt-2">
                        <button class="btn btn-outline-success">Invia</button>
                    </div>
                </form>
            </div>
        </div>
    </div>
</x-main>
