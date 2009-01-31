task :default => :start

task :start do
  FileUtils::mkdir_p "./log"
  sh "/opt/local/sbin/lighttpd -D -f lighttpd.conf &"
  puts "Started lighttpd"
end

task :stop do
  sh "kill `cat ./log/lighttpd.pid`"
end