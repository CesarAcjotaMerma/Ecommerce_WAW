<div>
    <style>
        nav svg{
            height: 20px;
        }
        nav .hidden{
            display: block !important;
        }
        .table>thead>tr>th{
            font-weight: bold;
            font-size: 11px;
        }
        .table > tbody > tr > td{
            font-size: 10px;
        }
    </style>
    <div class="container" style="padding: 30px 0">
        <div class="row">
            <div class="col-md-12">
                <div class="panel panel-default">
                    <div class="panel-heading">
                        <div class="row">
                            <div class="col-md-6">
                                Popups
                            </div>
                            <div class="col-md-6">
                                <a href="{{route('admin.addhomepopup')}}" class="btn btn-success pull-right">Agregar</a>
                            </div>
                        </div>
                    </div>
                    <div class="panel-body">
                        <!-- @if(Session::has('message'))
                            <div class="alert alert-success" role="alert">{{Session::get('message')}}</div>
                        @endif -->
                        <table class="table table-striped">
                            <thead>
                                <tr>
                                    <td>ID</td>
                                    <td>Imagen</td>
                                    <td>Titulo</td>
                                    <td>Subtitulo</td>
                                    <td>Precio</td>
                                    <td>Link</td>
                                    <td>Estado</td>
                                    <td>Fecha</td>
                                    <td>Accion</td>
                                </tr>
                            </thead>
                            <tbody>
                                @foreach ($popups as $popup)
                                <tr>
                                    <td>{{$popup->id}}</td>
                                    <td><img src="{{asset('assets/images/popups')}}/{{$popup->image}}" style="width:120px"/></td>
                                    <td>{{$popup->title}}</td>
                                    <td>{{$popup->subtitle}}</td>
                                    <td>{{$popup->price}}</td>
                                    <td>{{$popup->link}}</td>
                                    <td>{{$popup->status == 1 ? 'Activo':'Inactivo'}}</td>
                                    <td>{{$popup->created_at}}</td>
                                    <td>
                                        <a href="{{route('admin.edithomepopup',['popup_id'=>$popup->id])}}"><i class="fa fa-edit fa-2x"></i></a>
                                        <a style="margin-left:10px;" href="#" onclick="confirm('Estas seguro que quiere eliminar este Popup?') || event.stopImmediatePropagation()" wire:click.prevent="deletePopup({{$popup->id}})"><i class="fa fa-trash fa-2x text-danger"></i></a>
                                    </td>
                                </tr>
                                @endforeach
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
