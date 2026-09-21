# Github actions

This project uses Github actions to automate some tasks.
The following actions are used:

## Deploy to production
This action deploys the code to a production server using SSH.
it is triggered on every release/tag creation with the pattern `v*.*.*`.

The action uses the following secrets:
- `SSH_HOST`: The hostname or IP address of the production server.
- `SSH_USER`: The username to use for SSH.
- `SSH_KEY`: The private SSH key to use for authentication. (more on this below)

The action runs the following steps:
1. Pull the latest code from the repository.
2. Install composer dependencies.
3. Build the theme assets.


### SSH_KEY secret
To create an SSH key pair, run the following command on your local machine:
```bash
ssh-keygen -t rsa -b 4096 -C "github actions" -f "deployment_key" -N ""
```

For deploying on Rootnet servers, you need to setup your SSH key in the project,<br/>
To do this navigate to the project settings -> deployment tools<br/>
Here you need to activate GitHub CI/CD<br/>
And add the public key you generated to the list of SSH keys<br/>
Don't forget to delete the keys from your disk when you're done