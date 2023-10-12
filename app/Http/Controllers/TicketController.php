<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Mail;

class TicketController extends Controller
{
    private $tickets;

    public function __construct()
    {
        $this->tickets = [
            1 => ['email' => 'utente1@example.com', 'subject' => 'Errore 419', 'priority' => 'media', 'content' => 'Lorem ipsum dolor sit amet consectetur adipisicing elit. Nam, fuga? Illo, eum? Minima consectetur, veritatis magnam atque sunt rerum totam.'],
            2 => ['email' => 'utente2@example.com', 'subject' => 'Titolo sbagliato', 'priority' => 'bassa', 'content' => 'Lorem ipsum dolor sit amet consectetur adipisicing elit. Nam, fuga? Illo, eum? Minima consectetur, veritatis magnam atque sunt rerum totam.'],
            3 => ['email' => 'utente3@example.com', 'subject' => 'Errore 404', 'priority' => 'alta', 'content' => 'Lorem ipsum dolor sit amet consectetur adipisicing elit. Nam, fuga? Illo, eum? Minima consectetur, veritatis magnam atque sunt rerum totam.'],
            4 => ['email' => 'utente4@example.com', 'subject' => 'Testo con problema', 'priority' => 'media', 'content' => 'Lorem ipsum dolor sit amet consectetur adipisicing elit. Nam, fuga? Illo, eum? Minima consectetur, veritatis magnam atque sunt rerum totam.'],
            5 => ['email' => 'utente5@example.com', 'subject' => 'Errore 429', 'priority' => 'alta', 'content' => 'Lorem ipsum dolor sit amet consectetur adipisicing elit. Nam, fuga? Illo, eum? Minima consectetur, veritatis magnam atque sunt rerum totam.'],
        ];
    }


    public function index()
    {
        return view('tickets.index', ['tickets' => $this->tickets]);
    }

    public function show($id)
    {
        /* Controllo del array id per evitare di mettere valori dell'array che non esistono */
        if (!array_key_exists($id, $this->tickets)) {
            abort(404);
        }

        return view('tickets.show', ['ticket' => $this->tickets[$id]]);
    }

    public function  answer(Request $request)
    {
        /* return $request->all(); */

        $mail = new \App\Mail\Answer($request->response);

        Mail::to($request->email)->send($mail);

        /* return $mail->render(); */ /* ->  Método Render() per testare se funziona la  risposta della nostra mail. */

        return redirect()->route('tickets')->with(['success' => 'Risposta Inviata con Successo.']);
    }
}
