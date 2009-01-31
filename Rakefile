task :default => :start

file "httpd/lighttpd.conf" => "httpd/lighttpd.conf.erb" do
  Dir.chdir("httpd/") do
    puts "Generating httpd/lighttpd.conf from httpd/lighttpd.conf.erb"
    sh "erb lighttpd.conf.erb > lighttpd.conf"
  end
end

task :clean do
  Dir.chdir("httpd/") do
    FileUtils.rm "lighttpd.conf"
  end
end

task :start => "httpd/lighttpd.conf" do
  Dir.chdir("httpd/") do
    FileUtils::mkdir_p "log/"
    sh "/opt/local/sbin/lighttpd -D -f lighttpd.conf &"
    puts "Started lighttpd"
  end
end

task :stop do
  Dir.chdir("httpd/") do
    sh "kill `cat log/lighttpd.pid`"
  end
end