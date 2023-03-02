<!DOCTYPE html>
<html lang="ja">

<head>
    <script>
        (function(d) {
            var config = {
                    kitId: 'dpb6ggr',
                    scriptTimeout: 3000,
                    async: true
                },
                h = d.documentElement,
                t = setTimeout(function() {
                    h.className = h.className.replace(/\bwf-loading\b/g, "") + " wf-inactive";
                }, config.scriptTimeout),
                tk = d.createElement("script"),
                f = false,
                s = d.getElementsByTagName("script")[0],
                a;
            h.className += " wf-loading";
            tk.src = 'https://use.typekit.net/' + config.kitId + '.js';
            tk.async = true;
            tk.onload = tk.onreadystatechange = function() {
                a = this.readyState;
                if (f || a && a != "complete" && a != "loaded") return;
                f = true;
                clearTimeout(t);
                try {
                    Typekit.load(config)
                } catch (e) {}
            };
            s.parentNode.insertBefore(tk, s)
        })(document);
    </script>

    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <!-- favicon -->
    <link rel="icon" type="image/png" href="<?php echo get_template_directory_uri(); ?>/assets/images/common/favicon.ico">
    <link rel="apple-touch-icon" sizes="180x180" href="<?php echo get_template_directory_uri(); ?>/assets/images/common/favicon.ico">
    <!-- css -->
    <link href='<?php echo get_template_directory_uri(); ?>/assets/css/swiper.min.css' rel='stylesheet' type='text/css' media='all'>
    <link href='<?php echo get_template_directory_uri(); ?>/assets/css/style/common.min.css' rel='stylesheet' type='text/css' media='all'>
    <?php wp_head(); ?>
</head>

<body>