# Run coverage test
phpunit --coverage-html tests/coverage

# Set phpunit global cofig
phpunit --bootstrap="vendor\autoload.php"