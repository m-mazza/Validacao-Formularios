<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <meta name="csrf-token" content="{{csrf_token()}}">
    <title>@yield('titulo')</title>
    <link rel="stylesheet" href="{{asset('assets/css/bootstrap.css')}}">
    <style>
        a:hover {
            text-decoration: none;
        }
    </style>
</head>
<body>

    @yield('conteudo')

    <script src="{{asset('assets/js/jquery.js')}}"></script>
    <script src="{{asset('assets/js/bootstrap.js')}}"></script>


    {{-- @if($errors->any())
    <script>
        $(document).ready(function() {
            $('#exampleModal').modal('show');
        })
    </script>
    <div class="modal fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
        <div class="modal-dialog">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="exampleModalLabel">Erro ao Cadastrar</h5>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>
                <div class="modal-body">
                    @foreach($errors->all() as $error)
                        <p class="text-center">{{$error}}</p>
                    @endforeach
                </div>
                <div class="modal-footer"></div>
            </div>
        </div>
    </div>
    @endif --}}

</body>
</html>
