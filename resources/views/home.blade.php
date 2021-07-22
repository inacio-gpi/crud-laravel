@extends('layouts.app')

@section('title', 'Produto')

@section('content')

@auth
<div class="row">
    <div class="col-md-12">
        <div class="form-group">
            <a href="/usuario/novo" style="float: left;" class="btn btn-success mb-2">Novo Usuario</a>
        </div>
    </div>
</div>
@endauth

<div class="tab-content">
    <div class="tab-pane fade active show">
        <div class="shadow-sm mb-5">
            <div class="table-responsive">
                <table class="table mb-0 text-left">
                    <thead>
                        <tr>
                            <th class="cell">ID</th>
                            <th class="cell">Nome</th>
                            <th class="cell">Email</th>
                            <th class="cell">Senha</th>
                            <th class="cell"></th>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach($users as $key => $user)
                        <tr>
                            <td class="cell">{{ $user->id }}</td>
                            <td class="cell">{{ $user->name }}</td>
                            <td class="cell">{{ $user->email }}</td>
                            <td class="cell">********</td>
                            <td class="cell">
                                @auth
                                <span style="display:inline-flex">
                                    <span>
                                        <a href="/usuario/editar/{{ $user->id }}">
                                            <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-pencil-square" viewBox="0 0 16 16">
                                                <path d="M15.502 1.94a.5.5 0 0 1 0 .706L14.459 3.69l-2-2L13.502.646a.5.5 0 0 1 .707 0l1.293 1.293zm-1.75 2.456-2-2L4.939 9.21a.5.5 0 0 0-.121.196l-.805 2.414a.25.25 0 0 0 .316.316l2.414-.805a.5.5 0 0 0 .196-.12l6.813-6.814z" />
                                                <path fill-rule="evenodd" d="M1 13.5A1.5 1.5 0 0 0 2.5 15h11a1.5 1.5 0 0 0 1.5-1.5v-6a.5.5 0 0 0-1 0v6a.5.5 0 0 1-.5.5h-11a.5.5 0 0 1-.5-.5v-11a.5.5 0 0 1 .5-.5H9a.5.5 0 0 0 0-1H2.5A1.5 1.5 0 0 0 1 2.5v11z" />
                                            </svg>
                                        </a>
                                    </span>

                                    <form action="/usuario/remove/{{ $user->id }}" id="remove-usuario-{{ $user->id }}" method="POST">
                                        @csrf
                                        @method('DELETE')
                                        <span style="margin-left: 10px;">
                                            <button type="submit" class="link-a">
                                                <!-- <button href="#" onclick="document.getElementById('remove-usuario-{{ $user->id }}').submit();"> -->
                                                <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-trash" viewBox="0 0 16 16">
                                                    <path d="M5.5 5.5A.5.5 0 0 1 6 6v6a.5.5 0 0 1-1 0V6a.5.5 0 0 1 .5-.5zm2.5 0a.5.5 0 0 1 .5.5v6a.5.5 0 0 1-1 0V6a.5.5 0 0 1 .5-.5zm3 .5a.5.5 0 0 0-1 0v6a.5.5 0 0 0 1 0V6z" />
                                                    <path fill-rule="evenodd" d="M14.5 3a1 1 0 0 1-1 1H13v9a2 2 0 0 1-2 2H5a2 2 0 0 1-2-2V4h-.5a1 1 0 0 1-1-1V2a1 1 0 0 1 1-1H6a1 1 0 0 1 1-1h2a1 1 0 0 1 1 1h3.5a1 1 0 0 1 1 1v1zM4.118 4 4 4.059V13a1 1 0 0 0 1 1h6a1 1 0 0 0 1-1V4.059L11.882 4H4.118zM2.5 3V2h11v1h-11z" />
                                                </svg>
                                            </button>
                                        </span>
                                    </form>
                                </span>
                                @endauth
                            </td>
                        </tr>
                        @endforeach
                    </tbody>
                </table>
                <p id="msg-success" class="position-absolute text-success d-none"></p>
            </div>
        </div>
    </div>
</div>

<script>
    $(document).ready(function($) {

        $('form').submit(function(event) {
            event.preventDefault();
            var id = event.target.id.split("-");
            var id = id[2];
            var url_post = event.currentTarget.action;
            $.ajax({
                url: url_post,
                type: 'POST',
                data: $(this).serialize(),
                dataType: 'json'
            }).done(function(result) {
                if (result.success) {
                    if ($("#msg-success").hasClass('d-none')) {
                        $("#msg-success").toggleClass('d-none');
                    }
                    // console.log(id);s
                    $("#msg-success").text(result.success);
                    $("tr td:first-child").each(function(key, row) {
                        if (parseInt($(this).text()) == parseInt(id)) {
                            console.log("entrou");
                            console.log(this);
                            $(this).parent().remove();
                        }
                    })
                }
            });
        });
    });
</script>


@endsection
