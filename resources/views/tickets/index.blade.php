<x-main>
    <x-slot:title>Tickets</x-slot>
    <div class="mt-4 mb-4">
        <h1 class="lead fs-2 fw-bold">Tickets</h1>
    </div>
    {{-- Card di Successo  --}}
    <div class="my-3">
        <x-flash-messagge />
    </div>
    {{-- Creazione lista de tickets tramite foreach --}}
    <div>
        @foreach ($tickets as $id => $ticket)
            <div class="mb-3">
                <x-card :priority="$ticket['priority']" :subject="$ticket['subject']" :content="$ticket['content']" :email="$ticket['email']" :ticket-id="$id" />
            </div>
        @endforeach
    </div>
</x-main>
