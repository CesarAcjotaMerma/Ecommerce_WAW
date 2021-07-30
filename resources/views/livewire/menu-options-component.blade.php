<ul class="submenu-item">
    @foreach ($categories as $category)
        <li><a class="dropdown-item" href="{{route('product.category', ['category_slug'=>$category->slug])}}"><i class="fas fa-angle-right"></i> {{$category->name}}</a></li>
    @endforeach
</ul>