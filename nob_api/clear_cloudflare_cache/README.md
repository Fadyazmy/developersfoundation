## Clear Cloudflare Cache

Be sure to replace the fields with your own info.

curl -X DELETE "https://api.cloudflare.com/client/v4/zones/023e105f4ecef8ad9ca31a8372d0c353/purge_cache" \
-H "X-Auth-Email: iamnobodyrandom@yahoo.com" \
-H "X-Auth-Key: 6a17999330660807d93ac80935c6026612426" \
-H "Content-Type: application/json" \
--data '{"purge_everything":true}'