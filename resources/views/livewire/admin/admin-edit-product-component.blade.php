<div>
    <div class="container" style="padding: 30px 0;">
        <div class="row">
            <div class="col-md-12">
                <div class="panel panel-default">
                    <div class="panel-heading">
                        <div class="row">
                            <div class="col-md-6">
                                Editar Producto
                            </div>
                            <div class="col-md-6">
                                <a href="{{route('admin.products')}}" class="btn btn-success pull-right">Ver Productos</a>
                            </div>
                        </div>
                    </div>
                        <div class="panel-body">
                            @if(Session::has('message'))
                                <div class="alert alert-success" role="alert">{{Session::get('message')}}</div>
                            @endif
                            <form class="form-horizontal" enctype="multipart/form-data" wire:submit.prevent="updateProduct">
                                <div class="form-group">
                                    <label class="col-md-4 control-label">Nombre del Producto</label>
                                    <div class="col-md-4">
                                        <input type="text" placeholder="product name" class="form-control input-md" wire:model="name" wire:keyup="generateSlug"/>
                                    </div>
                                </div>

                                <div class="form-group">
                                    <label class="col-md-4 control-label">Slug de Producto</label>
                                    <div class="col-md-4">
                                        <input type="text" placeholder="product slug" class="form-control input-md" wire:model="slug"/>
                                    </div>
                                </div>

                                <div class="form-group">
                                    <label class="col-md-4 control-label">Talla</label>
                                    <div class="col-md-4">
                                        <select class="form-control" wire:model="size">
                                            <option value="x-small">X-S</option>
                                            <option value="small">S</option>
                                            <option value="medium">M</option>
                                            <option value="large">L</option>
                                            <option value="x-large">X-L</option>
                                        </select>
                                    </div>
                                </div>

                                <div class="form-group">
                                    <label class="col-md-4 control-label">Descripcion Corta</label>
                                    <div class="col-md-4">
                                        <textarea class="form-control" placeholder="descripcion corta" wire:model="short_description"></textarea>
                                    </div>
                                </div>

                                <div class="form-group">
                                    <label class="col-md-4 control-label">Descripcion</label>
                                    <div class="col-md-4">
                                        <textarea class="form-control" placeholder="descripcion" wire:model="description"></textarea>
                                    </div>
                                </div>

                                <div class="form-group">
                                    <label class="col-md-4 control-label">Precio Regular</label>
                                    <div class="col-md-4">
                                        <input type="text" placeholder="Regular Price" class="form-control input-md" wire:model="regular_price"/>
                                    </div>
                                </div>

                                <div class="form-group">
                                    <label class="col-md-4 control-label">Precio de Venta</label>
                                    <div class="col-md-4">
                                        <input type="text" placeholder="Sale Price" class="form-control input-md" wire:model="sale_price"/>
                                    </div>
                                </div>

                                <div class="form-group">
                                    <label class="col-md-4 control-label">SKU</label>
                                    <div class="col-md-4">
                                        <input type="text" placeholder="SKU" class="form-control input-md" wire:model="SKU"/>
                                    </div>
                                </div>

                                <div class="form-group">
                                    <label class="col-md-4 control-label">Stock</label>
                                    <div class="col-md-4">
                                        <select class="form-control" wire:model="stock_status">
                                            <option value="disponible">Disponible</option>
                                            <option value="agotado">Agotado</option>
                                        </select>
                                    </div>
                                </div>

                                <div class="form-group">
                                    <label class="col-md-4 control-label">Producto Destacado</label>
                                    <div class="col-md-4">
                                        <select class="form-control" wire:model="featured">
                                            <option value="0">No</option>
                                            <option value="1">Si</option>
                                        </select>
                                    </div>
                                </div>

                                <div class="form-group">
                                    <label class="col-md-4 control-label">Cantidad</label>
                                    <div class="col-md-4">
                                        <input type="text" placeholder="Quantity" class="form-control input-md" wire:model="quantity"/>
                                    </div>
                                </div>

                                <div class="form-group">
                                    <label class="col-md-4 control-label">Imagen del Producto</label>
                                    <div class="col-md-4">
                                        <input type="file" class="input-file" wire:model="newimage"/>
                                        @if($newimage)
                                            <img src="{{$newimage->temporaryUrl()}}" style="width:120px" />
                                        @else
                                            <img src="{{asset('assets/images/products')}}/{{$image}}" style="width:120px"/>
                                        @endif
                                    </div>
                                </div>

                                <div class="form-group">
                                    <label class="col-md-4 control-label">Galeria del Producto</label>
                                    <div class="col-md-4">
                                        <input type="file" class="input-file" wire:model="newimages" multiple/>
                                        @if($newimages)
                                            @foreach($newimages as $newimage)
                                                @if($newimage)
                                                    <img src="{{$newimage->temporaryUrl()}}" style="width:120px"/>
                                                @endif
                                            @endforeach
                                        @else
                                            @foreach($images as $image)
                                                @if($image)
                                                    <img src="{{asset('assets/images/products')}}/{{$image}}" style="width:120px"/>
                                                @endif
                                            @endforeach
                                        @endif
                                    </div>
                                </div>

                                <div class="form-group">
                                    <label class="col-md-4 control-label">Categoria</label>
                                    <div class="col-md-4">
                                        <select class="form-control" wire:model="category_id">
                                            <option value="0">Seleccionar Categoria</option>
                                            @foreach ($categories as $category)
                                            <option value="{{$category->id}}">{{$category->name}}</option>
                                            @endforeach
                                        </select>
                                    </div>
                                </div>

                                <div class="form-group">
                                    <label class="col-md-4 control-label"></label>
                                    <div class="col-md-4">
                                        <button type="submit" class="btn btn-warning">Actualizar</button>
                                    </div>
                                </div>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>
</div>