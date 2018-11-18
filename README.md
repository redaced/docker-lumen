### Build & Run

```bash
docker-compose up --build -d
```
cd images\php\app

```bash
docker run --rm -it -v $(pwd):/app saada/lumen-cli update
```

 `docker-compose.yml`


### Stop Everything

```bash
docker-compose down
```
