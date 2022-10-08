<?php require_once __DIR__ . '/prepend.php'; ?>

<?php 

  define('PAGE_TITLE', 'Image Formats');

  renderFeaturesTemplateStart(); 
 
?>

<p>There are many image file formats in the world. The ones listed
  below are generally recognized as usable on the Web, although BMP is
  generally not recommended as browser support is potentially constrained;
  it should usually be avoided for web content.</p>

<p>While it is not especially important that a web crawler can support image
  formats, the examples below are provided for completeness. Note that as
  not all browsers support all common formats, some images may not display
  below in the browser you are using to view this page.</p>

<table>
  <thead>
    <tr>
      <th>File format</th>
      <th>MIME type</th>
      <th>File extension(s)</th>
      <th>Sample</th>
    </tr>
  </thead>
  <tbody>
    <tr>
      <td>Animated Portable Network Graphics</td>
      <td><code>image/apng</code></td>
      <td><code>.apng</code></td>
      <td><img src="../assets/img/formats/sample.apng" /></td>
    </tr>
    <tr>
      <td>AV1 Image File Format</td>
      <td><code>image/avif</code></td>
      <td><code>.avif</code></td>
      <td><img src="../assets/img/formats/sample.avif" /></td>
    </tr>
    <tr>
      <td>Bitmap file</td>
      <td><code>image/bmp</code></td>
      <td><code>.bmp</code></td>
      <td><img src="../assets/img/formats/sample.bmp" /></td>
    </tr>
    <tr>
      <td>Graphics Interchange Format</td>
      <td><code>image/gif</code></td>
      <td><code>.gif</code></td>
      <td><img src="../assets/img/formats/sample.gif" /></td>
    </tr>
    <tr>
      <td>Microsoft Icon</td>
      <td><code>image/x-icon</code></td>
      <td><code>.ico</code>, <code>.cur</code></td>
      <td><img src="../assets/img/formats/sample.ico" /></td>
    </tr>
    <tr>
      <td>Joint Photographic Expert Group image</td>
      <td><code>image/jpeg</code></td>
      <td><code>.jpg</code>, <code>.jpeg</code>, <code>.jfif</code>,
        <code>.pjpeg</code>, <code>.pjp</code></td>
      <td><img src="../assets/img/formats/sample.jpg" /></td>
    </tr>
    <tr>
      <td>Portable Network Graphics</td>
      <td><code>image/png</code></td>
      <td><code>.png</code></td>
      <td><img src="../assets/img/formats/sample.png" /></td>
    </tr>
    <tr>
      <td>Scalable Vector Graphics</td>
      <td><code>image/svg+xml</code></td>
      <td><code>.svg</code></td>
      <td><img src="../assets/img/formats/sample.svg" /></td>
    </tr>
    <tr>
      <td>Tagged Image File Format</td>
      <td><code>image/tiff</code></td>
      <td><code>.tif</code>, <code>.tiff</code></td>
      <td><img src="../assets/img/formats/sample.tiff" /></td>
    </tr>
    <tr>
      <td>Web Picture format</td>
      <td><code>image/webp</code></td>
      <td><code>.webp</code></td>
      <td><img src="../assets/img/formats/sample.webp" /></td>
    </tr>
  </tbody>
</table>

<h3>File Sizes</h3>

<p>
  Ignoring quality levels, each format also has quite different file sizes -
  the table below shows an example image saved in each format. These
  examples are for illustrative purposes only, while I used a resized
  version of the same source photograph for each image, default save
  settings were used and I didn't investigate any optimisation settings.
  Some files also have EXIF or other image metadata which affect the final
  file size. With that said, the AVIF and WebP formats seem to be the best
  in regards to size and something worth keeping an eye on as more software
  packages support these formats.
</p>

<table>
  <thead>
    <th>Format</th>
    <th>Size</th>
  </thead>
  <tbody>
    <tr>
      <td><a href="../assets/img/format-compare/scaled-lighthouse.jxl">JPEG
          XL</a></td>
      <td>31.1 KB (31,948 bytes)</td>
    </tr>
    <tr>
      <td><a
          href="../assets/img/format-compare/scaled-lighthouse.webp">WebP</a>
      </td>
      <td>37.0 KB (37,972 bytes)</td>
    </tr>
    <tr>
      <td><a
          href="../assets/img/format-compare/scaled-lighthouse.avif">AVIF</a>
      </td>
      <td>98.7 KB (101,141 bytes)</td>
    </tr>
    <tr>
      <td><a
          href="../assets/img/format-compare/scaled-lighthouse.jpg">JPEG</a>
      </td>
      <td>111 KB (114,263 bytes)</td>
    </tr>
    <tr>
      <td><a
          href="../assets/img/format-compare/scaled-lighthouse.gif">GIF</a>
      </td>
      <td>261 KB (268,202 bytes)</td>
    </tr>
    <tr>
      <td><a
          href="../assets/img/format-compare/scaled-lighthouse.png">PNG</a>
      </td>
      <td>682 KB (699,212 bytes)</td>
    </tr>
    <tr>
      <td><a
          href="../assets/img/format-compare/scaled-lighthouse.tif">TIFF</a>
      </td>
      <td>878 KB (899,752 bytes)</td>
    </tr>
    <tr>
      <td><a
          href="../assets/img/format-compare/scaled-lighthouse.bmp">BMP</a>
      </td>
      <td>1.78 MB (1,870,230 bytes)</td>
    </tr>
  </tbody>
</table>

<h3>Learn More</h3>

<ul>
  <li><a
      href="https://developer.mozilla.org/en-US/docs/Web/Media/Formats/Image_types">MDN
      Image file type and format guide</a></li>
</ul>

<?php renderFeaturesTemplateEnd(); ?>
