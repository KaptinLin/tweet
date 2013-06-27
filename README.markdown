# Tweet!
#### Put twitter on your website with tweet!, an unobtrusive javascript plugin for jquery.

## Work with Twitter Api v1.1

1. You need to obtain twitter access token, see https://dev.twitter.com/docs/auth/obtaining-access-tokens for help.

2. Configure `lib/config.php` file.

3. with tweet scripts, give a twitter_api_proxy_url option relating to the `lib/index.php` file.

        <script type='text/javascript'>
            jQuery(function($){
                $(".tweet").tweet({
                    twitter_api_proxy_url: "lib/index.php"
                });
            });
        </script>

4. That's all
