<?php echo '<?xml version="1.0" encoding="UTF-8"?>'; ?>
<urlset xmlns="http://www.sitemaps.org/schemas/sitemap/0.9">
  
  <?php $__currentLoopData = $menus; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $menu): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
    <?php if($menu->padre_id == null): ?>
      <url>
        <loc><?php echo e(url('/')); ?></loc>
        <lastmod><?php echo e(gmdate('Y-m-dTH:i:sZ', strtotime($menu->updated_at))); ?></lastmod>
        <changefreq>daily</changefreq>
        <priority>1.0</priority>
      </url>
    <?php endif; ?>
    <?php if($menu->padre_id == 1): ?>
      <?php $__currentLoopData = $menu->menus; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $producto): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
        <url>
          <loc>
            <?php echo e(url($producto->padre->slug.'/'.$producto->slug)); ?>

          </loc>
          <lastmod>
            <?php echo e(gmdate('Y-m-dTH:i:sZ', strtotime($producto->updated_at))); ?>

          </lastmod>
          <changefreq>daily</changefreq>
          <priority>0.8</priority>
        </url>
        <?php $__currentLoopData = $producto->menus; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $categoria): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
          <url>
            <loc>
              <?php echo e(url($producto->slug.'/'.$categoria->slug)); ?>

            </loc>
            <lastmod>
              <?php echo e(gmdate('Y-m-dTH:i:sZ', strtotime($categoria->updated_at))); ?>

            </lastmod>
            <changefreq>daily</changefreq>
            <priority>0.4</priority>
          </url>
          <?php $__currentLoopData = $categoria->menus; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $sub_categoria): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
            <url>
              <loc>
                <?php echo e(url($producto->slug."/".$sub_categoria->slug)); ?>

              </loc>
              <lastmod>
                <?php echo e(gmdate('Y-m-dTH:i:sZ', strtotime($producto->updated_at))); ?>

              </lastmod>
              <changefreq>daily</changefreq>
              <priority>0.2</priority>
            </url>
          <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
        <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
      <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
    <?php endif; ?>
  <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
  <?php
    $file = "bsitemap.txt";
          $fh = @fopen($file, 'w');
          foreach($menus as $menu){
            if ($menu->padre_id == null) {
              @fwrite($fh, url($menu->slug)."\n");
            }  
              if($menu->padre_id == 1){
                  foreach($menu->menus as $producto){
                    @fwrite($fh, url($producto->padre->slug.'/'.$producto->slug));
                    @fwrite($fh, "\n");
                    foreach($producto->menus as $categoria){
                        @fwrite($fh, url($producto->padre->slug.'/'.$producto->slug));
                        @fwrite($fh, "\n");
                        foreach($categoria->menus as $sub_categoria){
                            @fwrite($fh, url($producto->padre->slug.'/'.$producto->slug));
                            @fwrite($fh, "\n");
                        }
                    }
                  }
              }
          }
  
    @fclose($file);
  ?>
</urlset>
<?php /**PATH /homepages/8/d479879361/htdocs/clickandbuilds/GammaGEP/resources/views/sitemap.blade.php ENDPATH**/ ?>