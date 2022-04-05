init:
	docker-compose build --force-rm --no-cache
	make up

up:
	docker-compose up -d
	echo "App running at http:127.0.0.1:8888/"

schema-update:
	docker exec -it guess php bin/console doctrine:cache:clear-metadata
	docker exec -it guess /home/guess/bin/console doctrine:database:create --if-not-exists
	docker exec -it guess /home/guess/bin/console doctrine:schema:update --force

terminal:
	docker exec -it guess sh