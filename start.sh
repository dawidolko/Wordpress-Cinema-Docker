#!/bin/bash

echo "🔄 Checking if Docker is installed..."
if ! command -v docker &> /dev/null
then
echo "❌ Docker is not installed. Install Docker and try again."
exit 1
fi

echo "✅ Docker is installed!"

echo "🔄 Checking if Docker is running..."
if (! docker stats --no-stream > /dev/null 2>&1 ); then
echo "⚠️ Docker is not running! Starting Docker..."
open -a Docker
sleep 5
fi

echo "🚀 Creating and starting containers..."
docker-compose down --volumes
docker system prune -a -f
docker-compose up -d

echo "⏳ Waiting for WordPress to start..."
sleep 10

echo "✅ WordPress is available at: http://localhost:8080"
echo "🔑 Login: admin | admin"