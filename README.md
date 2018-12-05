# binary-geckodriver

Downloads geckodriver binary for Linux (32bits or 64bits), macOS (Mac OS X) and Windows. 

The binary version is determined by the following factors:

* what browser version is currently installed (if binary found from the system).
* specified/configured version (see below under 'Configuration' topic)
    
## Configuration

Although the binary downloader usually ends up positively detecting the appropriate driver version that needs to be downloaded, user still has an option to specify the version explicity when needed.

```json
{
  "extra": {
    "geckodriver": {
      "version": "0.23.0"
    }
  }
}
```
