task :default => :start

file "lighttpd.conf" => "lighttpd.conf.erb" do
  puts "Generating lighttpd.conf from lighttpd.conf.erb"
  sh "erb lighttpd.conf.erb > lighttpd.conf"
end

task :clean do
  FileUtils.rm "lighttpd.conf"
end

task :start => "lighttpd.conf" do
  FileUtils::mkdir_p "./log"
  sh "/opt/local/sbin/lighttpd -D -f lighttpd.conf &"
  puts "Started lighttpd"
end

task :stop do
  sh "kill `cat ./log/lighttpd.pid`"
end