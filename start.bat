echo off
setlocal

echo 🔄 Checking if Docker is installed...
where docker >nul 2>nul
if %errorlevel% neq 0 (
echo ❌ Docker is not installed. Download and install Docker Desktop!
pause
exit /b
)

echo ✅ Docker is installed!

echo 🔄 Checking if Docker is running...
docker ps >nul 2>nul
if %errorlevel% neq 0 (
echo ⚠️ Docker is not running! Starting Docker...

start "" "C:\Program Files\Docker\Docker\Docker Desktop.exe"
timeout /t 10

echo 🚀 Creating and starting containers...
docker-compose down --volumes
docker system prune -a -f
docker-compose up -d

echo ⏳ Waiting for WordPress to start...
timeout /t 10

echo ✅ WordPress is running on: http://localhost:8080
echo 🔑 Login: admin | admin
start http://localhost:8080