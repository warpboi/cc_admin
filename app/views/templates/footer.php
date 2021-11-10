</main>
<footer>
  <h2>Fashion Design</h3>
    <h4>Berlangganan untuk mendapatkan info dari kami</h4>
    <div class="subscription">
      <form action="#">
        <input type="text" name="email" id="email" placeholder="Your Email" autocomplete="off" />
        <input type="submit" value="Subscribe" />
      </form>
    </div>
    <p>&#169; 2021 Fashion Design Inc.</p>
</footer>
<!-- <script src="./assets/js/script.js"></script> -->
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>

<?php
if (isset($data['script'])) {
  foreach ($data['script'] as $e => $i) {
?>
    <script src="<?= base_url; ?>/dist/js/<?= $i; ?>.js"></script>
<?php
  }
}
?>
</body>

</html>