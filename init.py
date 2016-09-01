import socket
import fcntl
import struct
import urllib2

def get_ip_address(ifname):
    s = socket.socket(socket.AF_INET, socket.SOCK_DGRAM)
    return socket.inet_ntoa(fcntl.ioctl(
        s.fileno(),
        0x8915,  # SIOCGIFADDR
        struct.pack('256s', ifname[:15])
    )[20:24])

ip = get_ip_address('wlan0')

urllib2.urlopen("http://tools.exsto.xyz/store_ip.php?ip=" + ip).read()

print ip