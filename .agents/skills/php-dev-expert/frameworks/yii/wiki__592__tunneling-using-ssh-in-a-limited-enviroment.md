# Tunneling using SSH in a limited enviroment | Wiki | Yii PHP Framework

> **Fonte / Source:** https://www.yiiframework.com/wiki/592/tunneling-using-ssh-in-a-limited-enviroment

---

## [Tunneling using SSH in a limited enviroment](wiki__592__tunneling-using-ssh-in-a-limited-enviroment.md)

1    0

3

Viewed: 25 572 times

Version: all

Category: [Others](wiki__index.md)

- [openssh](wiki__index.md)
- [ssh](wiki__index.md)
- [ssh tunnel](wiki__index.md)
- [tunnel](wiki__index.md)
- [tunneling](wiki__index.md)

Written by: [![nineinchnick](/user/avatar/40671?v=1) nineinchnick](https://www.yiiframework.com/user/40671)

Updated by: [![CeBe](/user/avatar/5951?v=1) CeBe](https://www.yiiframework.com/user/5951)

Created: Nov 21, 2013

Updated: 12 years ago

1. [Use case](#use-case)
2. [The solution](#the-solution)
3. [Run once](#run-once)
4. [Run on demand](#run-on-demand)
5. [Other tips](#other-tips)
6. [Summary](#summary)
7. [Troubleshooting](#troubleshooting)

This tutorial describes how to connect to a remote service via tunnel when only most basic software is available on the remote server. It is not directly related to Yii. It could be hovewer useful for web developers working with shared hosting sites with limited access.

This is an medium/advanced tutorial targeted for Linux users.

#### Use case [¶](#use-case)

Let's assume there is a remote server, on which a service is running, such as a database. You cannot directly connect to that service because it does not listen on a public IP or is behind a firewall. The only way of accessing the server is a SSH remote shell. There is no VPN and no other helpful software can be run in the shell.

Usually, a SSH session could be open and a local port could be forwared to a service on the remote side by using the **-L** switch. However, the drawbacks are:

- the SSH session has to be kept open, usually by leaving an open terminal window somewhere
- it won't restart itself if the connection is interrupted
- sometimes the AllowTcpForwarding option is turned off, disabling the **-L** and **-D** switch by the server.

#### The solution [¶](#the-solution)

Because SSH is binary safe, that is it can transmit ANY binary data. SSH has to be ordered to run a command on the remote server that would connect to a TCP service and redirect all SSH traffic to it and send back responses.

We will use netcat run on the server right after connecting:

```
ssh USER@REMOTE_SERVER "nc SERVICE_HOST SERVICE_PORT"
```

where:

- USER@REMOTE specifies your user on a remote server and the server's address
- SERVICE\_HOST - address of the service in the server's network, may be localhost
- SERVICE\_PORT - port of that service

If you're trying to connect to MySQL or MariaDB located on the same server:

```
ssh USER@REMOTE_SERVER "nc localhost 3306"
```

Now if you type anything to the terminal you'll send it straight to MySQL as binary data and will see binary data in response. You need to use a client program that would somehow attach to that SSH session.

#### Run once [¶](#run-once)

This is tricky, so if the command below scares you, jump straight to the next paragraph.

```
# clean up after running this last time
rm -f /tmp/f
# create a special FIFO file
mkfifo /tmp/f;
# print anything that appears in the FIFO file and send it through the SSH to the remove server
# the SSH after connecting will connect to the service
# anything sent back will be redirected to another netcat that listens for a local connection
# if you connect to the local netcat, it will sent you anything that is redirected to it and it will write anything you send to the FIFO file
# now go back to first point
# the ampersand at the end puts it in the background, where it awaits for a local connection
cat /tmp/f | ssh -q -T USER@REMOTE_SERVER "nc SERVICE_HOST SERVICE_PORT" | nc -l 127.0.0.1 LOCAL_PORT > /tmp/f  &
```

The **-q** switch stops SSH from outputing warnings and errors that would interrupt the binary data traffic. The **-T** switch tells it it will not be run in a normal terminal.

This can be shortened to one line:

```
rm -f /tmp/f; mkfifo /tmp/f; cat /tmp/f | ssh -q -T USER@REMOTE_SERVER "nc SERVICE_HOST SERVICE_PORT" | nc -l 127.0.0.1 LOCAL_PORT > /tmp/f  &
```

The LOCAL\_PORT can be any not used port from 1024 to 65535. If it's not working, select another one.

Now run a client that will connect to it locally, triggering the SSH connection.

```
mysql -h localhost -P LOCAL_PORT
```

Each time you run the client you need to first prepare the tunnel.

#### Run on demand [¶](#run-on-demand)

To avoid setting up the tunnel manually each time, it could be run by a "super server". It's a service that listens on a specified port for incoming connections, runs a command and redirects the traffic between them. Examples of such servers are inetd, xinetd and systemd. Select one of them that is available on your platform.

##### Key instead of a password [¶](#key-instead-of-a-password)

When the SSH connection is set up automatically, you can't enter a password, so a key must be used to authenticate. Another important advantage of using a key is the ability to set up multiple tunnels to different services on the same remote server and disabling a normal SSH shell. This is done by using a different key for each service.

After putting a **public** key in the \_~/.ssh/authorized*keys* file on the remote server add the following options before it in the same line, so it looks like:

```
no-port-forwarding,no-X11-forwarding,no-agent-forwarding,no-pty,command="/bin/nc SERVICE_HOST SERVICE_PORT",from="CLIENT_HOST" ssh-dss AAAAB3Nza...
```

where:

- no-port-forwarding, no-X11-forwarding, no-agent-forwarding - disables various SSH forwarding features
- no-pty - disables allocating a terminal
- command="/bin/nc SERVICE\_HOST SERVICE\_PORT" - forces SSH to always run this command when a connection is established using this key, no other command can be run
- from="CLIENT\_HOST" - (optional) allow only a specific IP to connect using this key

To use different keys on the client side, use the **-i** switch with a path to the **private** key file.

##### inetd [¶](#inetd)

It should be available on most older Linux distributions.

Edit the file */etc/inetd.conf* and add a line:

```
LOCAL_PORT	stream	tcp	nowait	root	/usr/bin/ssh -q -T USER@REMOTE_SERVER "/bin/nc SERVICE_HOST SERVICE_PORT"
```

Replace all uppercase placeholders with values that suit you. The LOCAL\_PORT can be any not used port from 1024 to 65535. If it's not working, select another one.

There is no need to specify the command run by SSH on the remote server if you put it before the public key in \_~/.ssh/authorized*keys* file.

Now restart inetd. On Ubuntu, it's called *openbsd-inetd*.

##### xinetd [¶](#xinetd)

This is a more modern replacement for inetd.

Create a new file in \_/etc/xinetd.d/SERVICE*NAME* with the following contents:

```
service SERVICE_NAME
{
        type        = UNLISTED
        protocol    = stream
        flags       = REUSE
        port        = LOCAL_PORT
        socket_type = stream
        wait        = no
        user        = root
        server      = /usr/bin/ssh
        server_args = -q -y -T USER@REMOTE_SERVER "/bin/nc SERVICE_HOST SERVICE_PORT"
        log_on_failure += USERID
        disable     = no
}
```

Replace all uppercase placeholders with values that suit you. The LOCAL\_PORT can be any not used port from 1024 to 65535. If it's not working, select another one.

##### systemd [¶](#systemd)

This is available in the newest Linux distributions, such as Fedora or Arch Linux.

Create two files in */etc/systemd/system*, one called \_SERVICE*NAME@.service*:

```
[Unit]
Description=Meaningful description

[Service]
ExecStart=-/usr/bin/ssh -q -T USER@REMOTE_SERVER"
StandardInput=socket
```

Second called \_SERVICE*NAME@.socket*:

```
[Unit]
Description=Meaningful description
Conflicts=SERVICE_NAME@%i.service

[Socket]
ListenStream=LOCAL_PORT
Accept=yes

[Install]
WantedBy=sockets.target
```

Replace all uppercase placeholders with values that suit you. The LOCAL\_PORT can be any not used port from 1024 to 65535. If it's not working, select another one.

Now call:

```
systemctl daemon-reload_
systemctl enable SERVICE_NAME@.socket
systemctl start SERVICE_NAME@.socket
```

#### Other tips [¶](#other-tips)

##### bash instead of nc [¶](#bash-instead-of-nc)

Sometimes even netcat is not available on the remote server. However, if bash is available, it can be used instead, because it has the ability to open TCP sockets as special files that can be read and written to.

Replace the remote command of:

```
nc SERVICE_HOST SERVICE_PORT
```

with:

```
exec 3<>/dev/tcp/SERVICE_HOST/SERVICE_PORT; cat <&3 & cat >&3
```

##### Running SSH as a user instead of root [¶](#running-ssh-as-a-user-instead-of-root)

Sometimes you want to run SSH that creates the tunnel from your user account so it uses your configuration and keys. Replace all ssh calls with:

```
/usr/bin/su USER -c "/usr/bin/ssh -q -T REMOTE_USER@REMOTE_SERVER"
```

##### Minimazing SSH overhead [¶](#minimazing-ssh-overhead)

When establishing a connection, SSH adds a considerable amount of overhead. This can be avoided by using master connections. When subsequent connections to the same host are made they reuse the first connection. Read more about the **-M** switch in the ssh(1) manual or the **ControlMaster** option in the ssh\_config(5) manual.

Also, enabling compression in SSH usually helps.

#### Summary [¶](#summary)

After practicing, when in need, just follow those steps:

- add the **public** key on the remote server with special options
- configure your favourite "super server" locally, restart or reload it
- connect

#### Troubleshooting [¶](#troubleshooting)

If something is not working, first try runnig the SSH command manually to see if it connects. Remember, that when you connect to a server for the first time, SSH asks you to verify the server signature.

The check all the elements one by one.
