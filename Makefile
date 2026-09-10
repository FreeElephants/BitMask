ENV_FILE ?= .env
-include $(ENV_FILE)

install: build
	composer install
	cp -n phpunit.xml.dist phpunit.xml

build:
	docker build --build-arg PHP_VERSION=$(PHP_VERSION) -t $(PHP_DEV_IMAGE):$(REVISION) --no-cache .

test:
	vendor/bin/phpunit
