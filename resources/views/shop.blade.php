<!-- resources/views/welcome.blade.php -->

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="csrf-token" content="{{ csrf_token() }}">
    <title>E-Voucher Shop</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css">
    <link rel="stylesheet" href="{{ asset('css/styles.css') }}">
    <style>
        /* Add custom styles here if needed */
        .card {
            margin-bottom: 20px;
        }
    </style>
</head>
<body>


    <div>
        <form id="clickForm" action="{{ route('recordclick') }}" method="post">
            <label for="voucherId">Voucher ID:</label>
            <input type="text" id="voucherId" name="voucher_id" required>

            <label for="totalBuy">Total Buy:</label>
            <input type="number" id="totalBuy" name="total_buy" required>

            <button type="submit">Buy Now!</button>
        </form>
    </div>
    <div class="v202_196">
      <span class="v202_198">GACHA</span>
      <span class="v202_313">GACHA</span>
      <span class="v202_229">Shop By Catagories</span>
      <span class="v202_273">Our Testimony</span>
      <span class="v202_314">(62) 86327460</span>
      <span class="v202_344">Jln, Semoga Berkah No 12</span>
      <span class="v202_345">gacha@gmail.com</span>
      <span class="v202_199">Home</span>
      <span class="v202_200">Contact Us</span>
      <span class="v202_201">Category</span>
      <div class="v202_202">
        <div class="v202_203">
          <div class="v202_204"></div>
        </div>
        <div class="v202_205">
          <div class="v202_206">
            <div class="v202_207"></div>
            <div class="v202_208"></div>
            <div class="v202_209"></div>
            <div class="v202_210"></div>
            <div class="v202_211"></div>
          </div>
        </div>
      </div>
      <div class="name"></div>
      <div class="v202_213">
        <span class="v202_214">Login</span>
      </div>
      <div class="v202_228"></div>
      <div class="v206_195">
        <div class="v206_196"></div>
      </div>
      <div class="v206_197">
        <span class="v202_347">Service</span>
        <span class="v202_346">Customer Support</span>
      </div>
      <div class="v206_198">
        <div class="v206_199"></div>
      </div>
      <div class="v206_204">
        <div class="v206_205"></div>
      </div>
      <div class="name"></div>
      <div class="v202_237">
        <span class="v202_238">Proses Instan Secepat Kilat</span>
        <span class="v202_239">AKU SUDAH MENGHABISKAN UANG KULIAH KU UNTUK TOP UP DISINI, HEBAT BANGET WEBSITE NYA AHH <3 <3 </span>
            <div class="v202_240">
              <div class="v202_241"></div>
              <span class="v202_242">Leon</span>
              <span class="v202_243">EVOS Esports</span>
              <div class="v202_244">
                <div class="v202_245"></div>
              </div>
              <div class="v202_246">
                <div class="v202_247"></div>
              </div>
              <div class="v202_248">
                <div class="v202_249"></div>
              </div>
              <div class="v202_250">
                <div class="v202_251"></div>
              </div>
              <div class="v202_252">
                <div class="v202_253"></div>
              </div>
            </div>
      </div>
      <div class="v202_286">
        <div class="v202_287">
          <div class="v202_288"></div>
        </div>
      </div>
      <div class="v205_240">
        <div class="v205_241">
          <div class="v205_242"></div>
        </div>
      </div>
      <div class="v206_203"></div>
      <div class="name"></div>
      <div class="v202_256">
        <span class="v202_257">Skin = Skill</span>
        <span class="v202_258">GAS TOUP YANG BANYAK BIAR MAKIN EZ GAMENYA!</span>
        <div class="v202_259">
          <div class="v202_260"></div>
          <span class="v202_261">Visdad</span>
          <span class="v202_262">Pro Gamer</span>
          <div class="v202_263">
            <div class="v202_264"></div>
          </div>
          <div class="v202_265">
            <div class="v202_266"></div>
          </div>
          <div class="v202_267">
            <div class="v202_268"></div>
          </div>
          <div class="v202_269">
            <div class="v202_270"></div>
          </div>
          <div class="v202_271">
            <div class="v202_272"></div>
            <div class="v202_274">
              <div class="v202_275"></div>
            </div>
          </div>
        </div>
      </div>
      <div class="v202_230">
        <div class="v202_231">
          <div class="v202_232"></div>
        </div>
      </div>
      <div class="v205_232">
        <div class="v205_233"></div>
      </div>
      <div class="v205_236">
        <div class="v205_237"></div>
      </div>
      <div class="v205_238">
        <div class="v205_239"></div>
      </div>
      <div class="v202_292">
        <div class="v202_293"></div>
        <div class="v202_294">
          <div class="v202_295"></div>
          <div class="v202_296"></div>
          <div class="v202_297"></div>
        </div>
      </div>
      <div class="v202_298">
        <div class="v202_299"></div>
        <div class="v202_300"></div>
        <div class="v202_301"></div>
        <div class="v202_302"></div>
        <div class="v202_303"></div>
        <div class="v202_304"></div>
        <div class="v202_305"></div>
        <div class="v202_306"></div>
        <div class="v202_307"></div>
        <div class="v202_308"></div>
        <div class="v202_309"></div>
        <div class="v202_310"></div>
        <div class="v202_311"></div>
        <div class="v202_312"></div>
      </div>
      <div class="v202_315">
        <div class="v202_316"></div>
        <div class="v202_317"></div>
        <div class="v202_318"></div>
      </div>
      <div class="v202_319">
        <div class="v202_320">
          <div class="v202_321">
            <div class="v202_322"></div>
          </div>
        </div>
        <div class="v202_323">
          <div class="v202_324">
            <div class="v202_325"></div>
          </div>
        </div>
      </div>
      <div class="v202_341"></div>
      <div class="v202_342"></div>
      <span class="v202_348">©2024 Gacha All Rights Are Served</span>
    </div>
</body>
</html>
