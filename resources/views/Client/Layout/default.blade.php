@extends('partials.base_layout')
@section('menu')
    <li class="sub-menu">
        <a href="{{ route('account.index') }}" >
            <i class="fa fa-desktop"></i>
            <span>Início</span>
        </a>
    </li>

    <li class="sub-menu">
        <a href="{{ route('account.settings') }}" >
            <i class="fa fa-smile-o"></i>
            <span>Minha conta</span>
        </a>
    </li>
    <li class="sub-menu">
        <a href="" >
            <i class="fa fa-usd"></i>
            <span>Financeiro</span>
        </a>
        <ul class="sub">
            <li><a  href="{{ route('account.invoices') }}"><i class="fa fa-folder-open"></i>Meus pedidos</a></li>
            <li><a  href="{{ route('account.subscriptions') }}"><i class="fa fa-refresh"></i>Subscrições</a></li>
        </ul>
    </li>
    @foreach($auth->user()->activeSubscriptions() as $subscription)
        <li class="sub-menu">
            <a href="#" >
                <i class="fa fa-server"></i>
                <span>{{ $subscription->virtualServer()->name }}</span>
            </a>
            <ul class="sub">
                <li><a  href="{{ route('account.virtual.settings' , ['id' => $subscription->virtualServer()->id]) }}"><i class="fa fa-cogs"></i>Configurações</a></li>
                <li><a  href="{{ route('account.virtual.keys' , ['id' => $subscription->virtualServer()->id]) }}"><i class="fa fa-key"></i>Privilege keys</a></li>
                <li><a  href="{{ route('account.virtual.ban' , ['id' => $subscription->virtualServer()->id]) }}"><i class="fa fa-list-alt"></i>Ban list</a></li>
                <li><a  href="{{ route('account.virtual.bot.index' , ['id' => $subscription->virtualServer()->id]) }}"><i class="fa fa-rocket"></i>TSbot</a></li>
            </ul>
        </li>
    @endforeach

    <li class="sub-menu">
        <a href="{{ route('account.help.index') }}">
            <i class="fa fa-life-ring"></i>
            <span>Helpdesk</span>
        </a>
    </li>

    <li class="sub-menu">
        <a href="javascript:;">
            <i class="fa fa-comments-o"></i>
            <span>Atendimento Online</span>
        </a>
    </li>
@endsection
