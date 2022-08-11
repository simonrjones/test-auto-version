# test-auto-version

testing

## Auto-version

Ensure your commits follow [conventional commits](https://www.conventionalcommits.org/en/v1.0.0/) and a pull request to generate the next version, based on [semantic versioning](https://semver.org/), will be created. This works by adding specific text into your commits:

* `fix:` this indicates a bug fix and creates a new patch version
* `feat:` this indicates a new feature and creates a new minor version
* include a footer of `BREAKING CHANGE:` to indicate there is a breaking change to your code and this creates a new major release 
