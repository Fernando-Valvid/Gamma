@foreach($menus as $menu)
  @if($menu->padre_id == 1)
    @foreach($menu->menus as $producto)
      <url>
        <loc>{{url($producto->padre->slug.'/'.$producto->slug)}}</loc>
        <lastmod>{{gmdate('Y-m-dTH:i:sZ', strtotime($producto->updated_at))}}</lastmod>
        <changefreq>daily</changefreq>
        <priority>0.8</priority>
      </url>
      @foreach($producto->menus as $categoria)
        <url>
          <loc>{{url($producto->slug.'/'.$categoria->slug)}}</loc>
          <lastmod>{{gmdate('Y-m-dTH:i:sZ', strtotime($categoria->updated_at))}}</lastmod>
          <changefreq>daily</changefreq>
          <priority>0.4</priority>
        </url>
        @foreach($categoria->menus as $sub_categoria)
          <url>
            <loc>{{url($producto->slug."/".$sub_categoria->slug)}}</loc>
            <lastmod>{{gmdate('Y-m-dTH:i:sZ', strtotime($producto->updated_at))}}</lastmod>
            <changefreq>daily</changefreq>
            <priority>0.2</priority>
          </url>
        @endforeach
      @endforeach
    @endforeach
  @endif
@endforeach

@php
    $file = "bsitemap.txt";
          $fh = @fopen($file, 'w');
          foreach($menus as $menu){
            if ($menu->padre_id == null) {
              @fwrite($fh, url($menu->slug)."\n");
            }  
              if($menu->padre_id == 1){
                  foreach($menu->menus as $producto){
                    @fwrite($fh, url($producto->padre->slug.'/'.$producto->slug."\n"));
                    foreach($producto->menus as $categoria){
                        @fwrite($fh, url($producto->slug.'/'.$categoria->slug."\n"));
                        foreach($categoria->menus as $sub_categoria){
                            @fwrite($fh, url($producto->slug.'/'.$sub_categoria->slug . "\n"));
                        }
                    }
                  }
              }
          }
    @fclose($file);
  @endphp