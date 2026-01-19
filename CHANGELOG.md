# Changelog

## [2.0.0](https://github.com/Eduframe/eduframe-php-client/compare/v1.4.0...v2.0.0) (2026-01-19)


### ⚠ BREAKING CHANGES

* Require minimal php 8.1 version
* Update guzzle requirement to ^7.5

### Features

* Add sku field to CatalogVariant ([08ccb52](https://github.com/Eduframe/eduframe-php-client/commit/08ccb5217812b515b56d816904ba1410e20e07fa))
* Enable signup_url in CatalogProduct ([b0d6e67](https://github.com/Eduframe/eduframe-php-client/commit/b0d6e671a63b1b8e6688a5b3b5b31e365f7d75ef))
* Retrieve properties attribute of catalog variants ([6a2c1e9](https://github.com/Eduframe/eduframe-php-client/commit/6a2c1e916e218ae7db1b8e8aea5a13d3bf10b3f8))


### Bug Fixes

* Add type to $fillable ([59407b9](https://github.com/Eduframe/eduframe-php-client/commit/59407b990cf0f2c0fffe41b5ebc9ce4fafdf76ae))
* Handle return types when deleting objects ([52a6beb](https://github.com/Eduframe/eduframe-php-client/commit/52a6beb28f1b31cb7d27655e408be193cc3a6519))
* Loading of nested items ([120749e](https://github.com/Eduframe/eduframe-php-client/commit/120749e86604c91b9a32fde1313ffefc46b6598f))


### Miscellaneous Chores

* Add field to Address resource ([a9243fe](https://github.com/Eduframe/eduframe-php-client/commit/a9243fe9908e76168b6db7a300c53287fcce82e3))
* Require minimal php 8.1 version ([a87ae4c](https://github.com/Eduframe/eduframe-php-client/commit/a87ae4c4d8e4128a50404c1c432e0efcbeafce65))
* Update guzzle requirement to ^7.5 ([8e1cab6](https://github.com/Eduframe/eduframe-php-client/commit/8e1cab6662d91439d9ed2495563767f39a6e54d8))

## [1.4.0](https://github.com/Drieam/eduframe-php-client/compare/v1.3.1...v1.4.0) (2024-07-08)


### Features

* Allow to pass configuration ([9ddffba](https://github.com/Drieam/eduframe-php-client/commit/9ddffba3d5edee89876dfcee49b8f0de0811e9d4))

## [1.3.1](https://github.com/Drieam/eduframe-php-client/compare/v1.3.0...v1.3.1) (2024-02-09)


### Miscellaneous Chores

* Update example with new lead creation ([ff16952](https://github.com/Drieam/eduframe-php-client/commit/ff16952c604fd775ba17d9d105aa1592ea4e5d80))

## [1.3.0](https://github.com/Drieam/eduframe-php-client/compare/v1.2.0...v1.3.0) (2023-08-24)


### Features

* Align teacher properties with api ([b2b0a14](https://github.com/Drieam/eduframe-php-client/commit/b2b0a14bb7df603c80af187c5f0e0d763701ea37))

## [1.2.0](https://github.com/Drieam/eduframe-php-client/compare/v1.1.0...v1.2.0) (2023-03-20)


### Features

* Add phpcs configuration ([e6476e9](https://github.com/Drieam/eduframe-php-client/commit/e6476e96054815109e3fc447c1722e80d43d12dc))
* Add show_on_website to product and variant ([4e15908](https://github.com/Drieam/eduframe-php-client/commit/4e1590864afad75ff02298384008f0342290aa90))


### Bug Fixes

* Add missing throw statement ([d2dbea7](https://github.com/Drieam/eduframe-php-client/commit/d2dbea7501c8a1e81d4f47fc8f6980799160a968))

## [1.1.0](https://github.com/Drieam/eduframe-php-client/compare/v1.0.1...v1.1.0) (2023-02-15)


### Features

* Add program elements endpoint ([13e1aaa](https://github.com/Drieam/eduframe-php-client/commit/13e1aaae6480b519ccaad2b8196552c0d8500941))

## [1.0.1](https://github.com/Drieam/eduframe-php-client/compare/v1.0.0...v1.0.1) (2023-01-20)


### Miscellaneous Chores

* Lower php requirement to 7 ([e0c19ca](https://github.com/Drieam/eduframe-php-client/commit/e0c19cabd6e4f47717b61b9c6be7916c9e2a72d9))

## 1.0.0 (2023-01-20)


### Features

* Add catalog products and variants endpoints ([6fcacb3](https://github.com/Drieam/eduframe-php-client/commit/6fcacb3ca89a4b630639e2543b6ac91f7ea2b041))
* Add catalog variant id ([6e52ec7](https://github.com/Drieam/eduframe-php-client/commit/6e52ec74c807cbbee79d6552a94b8fe066fd98bd))
* Add custom to the edition and planned course ([2c2a769](https://github.com/Drieam/eduframe-php-client/commit/2c2a769552b3586d01856ac43b4aaa4ade8b4d05))
* Add custom to the variant ([624f00a](https://github.com/Drieam/eduframe-php-client/commit/624f00a3c9066df59e7f115822f5dc511ce73168))
* Add parent_id to the category ([69a851b](https://github.com/Drieam/eduframe-php-client/commit/69a851b2bf2e7e5d4e662deb49bf51974d6ab642))
* Add signup url to the program ([d33c82f](https://github.com/Drieam/eduframe-php-client/commit/d33c82f779b60d8405e8e81d376e439be3392ca0))
* Add slug to the catalog product ([b7687c9](https://github.com/Drieam/eduframe-php-client/commit/b7687c9e8c14d5688d0641e4f197bda6f096fb0b))
* Allow to add labels to leads ([3d3d280](https://github.com/Drieam/eduframe-php-client/commit/3d3d280b97b1949bb14b83a1c41feae25d6b3e73))
* Change user to teacher endpoint ([b73763e](https://github.com/Drieam/eduframe-php-client/commit/b73763e7af0cc52d42a351747c0aae5675936721))
* Extend order resource ([2ae4f86](https://github.com/Drieam/eduframe-php-client/commit/2ae4f86ef8f86bbce65735b70c7749b4bbc31a34))
* Update required php version ([be0dfc7](https://github.com/Drieam/eduframe-php-client/commit/be0dfc7d77b719b44d9f16d251d89a7255e2a318))


### Bug Fixes

* Fix an stack issue when retrieving lots of pages ([c8c4419](https://github.com/Drieam/eduframe-php-client/commit/c8c44191f27f655b88495f67cbff25980deab3f9))
* Fix deprecated optional parameter ([71b4082](https://github.com/Drieam/eduframe-php-client/commit/71b4082eb9d7b727d9b35f2506f090cf94be54b7))


### Miscellaneous Chores

* Update readme ([76e5322](https://github.com/Drieam/eduframe-php-client/commit/76e53227489fd09c54758892205c2b656757e3f7))
