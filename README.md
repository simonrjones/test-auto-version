# test-auto-version

A test repo to test how release-please works.

## Creating new releases

This repo uses [Release Please](https://github.com/marketplace/actions/release-please-action) to automatically create releases, based on [semantic versioning](https://semver.org/).

To create a new release use [conventional commits](https://www.conventionalcommits.org/en/v1.0.0/) in your commit message. This will automatically create a Release PR, which is kept up to date with further commits and you can merge it to create the new release when you are ready.

Use the following keywords in your commits:

* `fix:` this indicates a bug fix and creates a new patch version (e.g. 1.0.1).
* `feat:` this indicates a new feature and creates a new minor version (e.g. 1.1).
* To create a new major version (e.g. 2.0.0) either append an exclamation mark to `fix!:` or `feat!:` or add a foter of `BREAKING CHANGE:` with details of what breaking changes there are.

If the action fails to run you can view the action and select `Re-run all jobs` to re-run it.
