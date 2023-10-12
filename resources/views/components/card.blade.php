<div class="card">
    {{-- Controllo di priorità --}}
    @if ($priority === 'alta')
        <h5 class="card-header text-danger text-capitalize fw-bold">{{ $priority }}</h5>
    @elseif ($priority === 'media')
        <h5 class="card-header text-warning text-capitalize fw-bold">{{ $priority }}</h5>
    @else
        <h5 class="card-header text-success text-capitalize fw-bold">{{ $priority }}</h5>
    @endif
    <div class="card-body">
        <h5 class="card-title">{{ $subject }}</h5>
        <p class="card-text">{{ $content }}</p>
        <p class="card-text text-primary">{{ $email }}</p>
        <a href="{{ route('tickets.show', $ticketId) }}" class="btn btn-primary">Visualizza</a>
    </div>
</div>
