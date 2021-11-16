<div class="sidebar">
  <div class="top-item">
    <h4>Explore</h4>
    <ul class="">
      <li class="side-item">
        <a href="<?= base_url; ?>/katalog/clothes" class="nav-link">
          <img class="sidebar-icon" src="<?= base_url; ?>/dist/img/t-shirt<?php if ($data['mix_page'] == 'clothes') {
                                                                            echo '_color';
                                                                          } ?>.png">
          <p>Clothes</p>
        </a>
      </li>
      <li class="side-item">
        <a href="<?= base_url; ?>/katalog/pants" class="nav-link">
          <img class="sidebar-icon" src="<?= base_url; ?>/dist/img/celana-logo<?php if ($data['mix_page'] == 'pants') {
                                                                                echo '_color';
                                                                              } ?>.png">
          <p>Pants</p>
        </a>
      </li>
      <li class="side-item">
        <a href="<?= base_url; ?>/katalog/shoes" class="nav-link">
          <img class="sidebar-icon" src="<?= base_url; ?>/dist/img/sepatu-logo.png">
          <p>Shoe</p>
        </a>
      </li>

    </ul>

  </div>
  <ul class="bottom-item">
    <li class="side-item">
      <a href="<?= base_url; ?>/mixing" class="nav-link">
        <img class="sidebar-icon" src="<?= base_url; ?>/dist/img/panduan-pakaian.png">
        <p>Paduan pakaian</p>
      </a>
    </li>
  </ul>
</div>