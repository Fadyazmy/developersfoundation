## Clear Cloudflare Cache

Be sure to replace the fields with your own info.

curl -X DELETE "https://api.cloudflare.com/client/v4/zones/0be7b1daf9a7e94109bb013e1ef0e455/purge_cache" \
-H "X-Auth-Email: iamnobodyrandom@yahoo.com" \
-H "X-Auth-Key: 6a17999330660807d93ac80935c6026612426" \
-H "Content-Type: application/json" \
--data '{"purge_everything":true}'

curl -X GET "https://api.cloudflare.com/client/v4/zones?name=developersfoundation.ca&status=active&page=1&per_page=20&order=status&direction=desc&match=all" \
-H "X-Auth-Email: iamnobodyrandom@yahoo.com" \
-H "X-Auth-Key: 6a17999330660807d93ac80935c6026612426" \
-H "Content-Type: application/json"