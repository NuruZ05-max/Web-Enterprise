# Download cacert.pem into project root
# Usage: run this from PowerShell (as user) in the project folder, or execute this script file.
# Example: .\scripts\download-cacert.ps1

$scriptDir = Split-Path -Parent $MyInvocation.MyCommand.Path
$projectRootPath = Resolve-Path (Join-Path $scriptDir '..')
$dest = Join-Path $projectRootPath 'cacert.pem'

$uri = 'https://curl.se/ca/cacert.pem'
Write-Host "Downloading cacert.pem from $uri to $dest ..."

try {
    # Use -UseBasicParsing for older PowerShell versions (Windows PowerShell 5.1)
    Invoke-WebRequest -Uri $uri -OutFile $dest -UseBasicParsing -ErrorAction Stop

    if (Test-Path $dest) {
        $info = Get-Item $dest
        if ($info.Length -gt 10000) {
            Write-Host "Downloaded cacert.pem successfully (size: $($info.Length) bytes)."
            Write-Host "You can set CACERT_PATH in .env to: $dest"
        } else {
            Write-Warning "File downloaded but size looks small ($($info.Length) bytes). Check file contents: $dest"
        }
    } else {
        Write-Error "Download finished but file not found at $dest"
    }
} catch {
    Write-Error "Failed to download cacert.pem: $_"
}
