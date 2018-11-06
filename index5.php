<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <link rel="stylesheet" type="text/css" href="index3.css">
    <title>Document</title>
</head>
<body>   
    <?php
    echo <<<HTML
        if(isset($_GET['name'])){
             <div class="rc-anchor rc-anchor-normal rc-anchor-light">
                <div class="rc-anchor-content">
                    <div class="rc-inline-block">
                        <div class="rc-anchor-center-container"></div>
                    </div>
                    <div class="rc-inline-block">
                        <div class="rc-anchor-center-container">
                            <label class="rc-anchor-center-item rc-anchor-checkbox-label" aria-hidden="true" role="presentation" id="recaptcha-anchor-label">
                                <span aria-live="polite" aria-labelledby="recaptcha-accessible-status"></span>
             私は$_GET['name']ではありません
             </label>
                        </div>
                    </div>
                </div>
                <div class="rc-anchor-normal-footer">
                    <div class="rc-anchor-logo-portrait" aria-hidden="true" role="presentation">
                        <div class="rc-anchor-logo-img rc-anchor-logo-img-portrait">
                        </div>
                        <div class="rc-anchor-logo-text">reCAPTCHA
                        </div>
                    </div>
                </div>
            </div>
        }else{   
                <h1>入力フォーム</h1>
                <form action="index5.php" method="get">
                <input type="text" name="name">
                <input type="submit" value="送信">
            </form>
        }
HTML;
    ?>
        
</body>
</html>