@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">{{ __('Vérification de votre adresse mail') }}</div>

                <div class="card-body">
                    @if (session('resent'))
                        <div class="alert alert-success" role="alert">
                            {{ __('Un nouveau lien de vérification vous a été envoyé par mail.') }}
                        </div>
                    @endif

                    {{ __('Avant de continuer, veuillez vérifier votre mail pour le lien de vérification.') }}
                    {{ __('Si vous n'avez pas reçu l'email') }}, <a href="{{ route('verification.resend') }}">{{ __('
                    cliquez ici pour en demander un autre') }}</a>.
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
