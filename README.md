# Open Aware

An API intended to be used to store some informations on open source projects, its creator, and donations that users make to projects.
It is only represents a basic concept now, and may be improved with time.

### How to run

First be asured that you have docker and docker-compose installed (on Linux), and then in the root of this folder execute the following command:

```bash
docker-compose up
```

Wait for the images to be downloaded and then you can interact with the project using port 8000 of your localhost address.

The Restful API is binded to the route /api/v1, with the following HTTP methods on the sub-routes:

* /users (GET, POST, DELETE, PATCH, PUT)
  - /users/{id}/projects (GET)
  - /users/{id}/likes (GET)
  - /users/{id}/donations (GET)
  - /users/{id}/roles (GET)
* /projects (GET, POST, DELETE, PATCH, PUT)
  - /users/{id}/creator (GET)
  - /projects/{id}/likes (GET)
  - /users/{id}/donations (GET)
  - /users/{id}/roles (GET)
* /likes (GET, POST)
* /donations (GET, POST)
* /roles (GET, POST)
