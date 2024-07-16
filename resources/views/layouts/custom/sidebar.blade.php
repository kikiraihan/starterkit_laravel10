<aside class="flex-none w-1/2 md:w-1/6 fixed md:relative md:flex flex-col space-y-1 border-r-2 border-gray-200 p-2 h-screen md:h-auto" x-show="asideOpen" style="background-color: rgba(255, 255, 255, 0.95);">
    @foreach ([
        ['judul'=>'Dashboard','icon'=>'bx bxs-dashboard','route'=>'dashboard'],
        // ['judul'=>'Master','icon'=>'bx bx-box','route'=>'#', 'submenu' => [
        //     ['judul'=>'Provinsi','icon'=>'bx bx-map-alt','route'=>'resource.list.province'],
        // ]],
    ] as $item)
    
    @if(isset($item['submenu']))
    <div x-data="{ open: false }">
        <a href="#" @click="open = !open" class="flex items-center space-x-1 rounded-md px-2 py-2 hover:bg-gray-100 hover:text-blue-600">
            <span class="text-2xl"><i class="{{$item['icon']}}"></i></span>
            <span>{{$item['judul']}}</span>
            <span class="ml-auto" x-bind:class="{'transform rotate-90': open}"><i class="bx bx-chevron-right"></i></span>
        </a>
        <div x-show="open" class="pl-4 space-y-1">
            @foreach ($item['submenu'] as $subitem)
                <a href="{{ route($subitem['route']) }}" class="flex items-center space-x-1 rounded-md px-2 py-2 hover:bg-gray-100 hover:text-blue-600">
                    <span class="text-2xl"><i class="{{$subitem['icon']}}"></i></span>
                    <span>{{$subitem['judul']}}</span>
                </a>
            @endforeach
        </div>
    </div>
    @else
    <a href="{{ route($item['route']) }}" class="flex items-center space-x-1 rounded-md px-2 py-2 hover:bg-gray-100 hover:text-blue-600">
        <span class="text-2xl"><i class="{{$item['icon']}}"></i></span>
        <span>{{$item['judul']}}</span>
    </a>
    @endif
    @endforeach
</aside>
