
namespace :demo do
  task :deploy do
    sh "rm -Rf _site"
    sh "jekyll --url {{ staging_url }}"
    sh "rsync -va --delete _site/ {{ staging_server }}"
  end
end

namespace :prod do
  task :deploy do
    sh "rm -Rf _site"
    sh "jekyll --url {{ production_url }}"
    sh "rsync -va --delete _site/ {{ production_server }}"
  end
end
