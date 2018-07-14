<!doctype html>
<html lang="{{ app()->getLocale() }}">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <title>Janken</title>

    <!-- Fonts -->
    <link href="https://fonts.googleapis.com/css?family=Raleway:100,600" rel="stylesheet" type="text/css">

    <!-- Styles -->
    <link href="https://stackpath.bootstrapcdn.com/bootswatch/4.1.1/flatly/bootstrap.min.css" rel="stylesheet" integrity="sha384-WuViQmTamrPyvMFZjf8te7HpKtdxuzV/HX1yG26a0d8yieIBr+beDf1ME99iX1cM" crossorigin="anonymous">

    <!-- JS -->
    <script type="text/javascript" src="js/custom.js"></script>
</head>
<body>
    <div class="container col-md-12 mt-5">
        <div class="row justify-content-md-center">
            <div class="col-md-2 text-center">
                <img src="storage/stones.png">
                <p class="text-center"><strong>ROCK(ぐう)</strong></p>
            </div>
            <div class="col-md-2 text-center">
                <img src="storage/copy.png">
                <p class="text-center"><strong>PAPER(ぱあ)</strong></p>
            </div>
            <div class="col-md-2 text-center">
                <img src="storage/scissors.png">
                <p class="text-center"><strong>SCISSORS(ちょき)</strong></p>                
            </div>
            
        </div>

        <div class="row justify-content-md-center">
            <div class="jumbotron col-md-10">
              <h2>ぐう・ぱあ・ちょき<small> 「宝くじ」</small></h2>
              <p class="lead"></p>
              <hr class="my-4">
              <p>This is a modified game of rock-paper-scissors where you try to defeat the computer's set-of-3 combination with the following point system</p>
              <div class="row">
                <div class="col">
                    <ul>
                      <li>1 win = 1 point</li>
                      <li>1 draw = no point</li>
                      <li>1 loss = -1 point</li>
                  </ul>
              </div>
              <div class="col">
                 <ul>
                    <strong>Combination modifiers:</strong>
                    <li>2 wins/losses = x2 points</li>
                    <li>3 wins/losses = x3 points</li>
                </ul>
            </div>         


        </div>
        <hr class="my-4">
        <div class="container">
            @if ($message=Session::get('error'))
                <div class="alert alert-dismissible alert-danger">
            <button type="button" class="close" data-dismiss="alert">&times;</button>
            <strong>Oh snap!</strong> 三つを選んでください！
            </div>
            @endif

          <div class="pull-right">
              <h4 id="points"></h4>
          </div>
          <div class="col-md-12">
              <table class="table table-hover text-center">
                  <thead>
                      <tr>
                        <th>1st Pick</th>
                        <th>2nd Pick</th>
                        <th>3rd Pick</th>
                    </tr>
                </thead>
                <tbody>
                  <tr class="table-warning">
                    <td><img src="" id="img1"></td>
                    <td><img src="" id="img2"></td>
                    <td><img src="" id="img3"></td>
                </tr>
            </tbody>
        </table>
        <form>
            <label>Choose Your Combination:</label>
            <div class="item form-group">
                <button type="button" class="btn btn-outline-secondary" id="btn_rock" onclick="addRock('img')">ぐう</button>
                <button type="button" class="btn btn-outline-info" id="btn_paper" onclick="addPaper('img')">ぱあ</button>
                <button type="button" class="btn btn-outline-success" id="btn_scissors" onclick="addScissors('img')">ちょき</button>
            </div>
                <input type="hidden" id="pick1" name="pick1" value="">
                <input type="hidden" id="pick2" name="pick2" value="">
                <input type="hidden" id="pick3" name="pick3" value="">

                
                    <hr class="my-4">
                    <div class="row">
                        Your choices:
                        <table class="table table-hover text-center">
                  <thead>
                      <tr>
                        <th>1st Pick</th>
                        <th>2nd Pick</th>
                        <th>3rd Pick</th>
                    </tr>
                </thead>
                <tbody>
                  <tr class="table-warning">
                    <td><img src="" id="imgr1"></td>
                    <td><img src="" id="imgr2"></td>
                    <td><img src="" id="imgr3"></td>
                </tr>
            </tbody>
            </table>
            </div>
                    <div class="row">
                        Computer's choices:
                        <table class="table table-hover text-center">
                  <thead>
                      <tr>
                        <th>1st Pick</th>
                        <th>2nd Pick</th>
                        <th>3rd Pick</th>
                    </tr>
                </thead>
                <tbody>
                  <tr class="table-danger">
                    <td><img src="" id="imgc1"></td>
                    <td><img src="" id="imgc2"></td>
                    <td><img src="" id="imgc3"></td>
                </tr>
            </tbody>
            </table>
            </div>

                    <div>
                        <h4 id="result"></h4>
                    </div>
                <hr class="my-4">
                <button type="button" class="btn btn-primary btn-lg btn-block" onclick="play()">Play</button>
            </form>
        </div>

    </div>
</div>        
</div>
</div>

<div class="footer">
    <div>Icons made by <a href="http://www.freepik.com" title="Freepik">Freepik</a> from <a href="https://www.flaticon.com/" title="Flaticon">www.flaticon.com</a> is licensed by <a href="http://creativecommons.org/licenses/by/3.0/" title="Creative Commons BY 3.0" target="_blank">CC 3.0 BY</a></div>
</div>
</body>
</html>
