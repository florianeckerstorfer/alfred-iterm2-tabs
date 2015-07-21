#!/usr/bin/osascript
set the_output to ""
tell application "iTerm"
    repeat with myterm in terminals
        --set myterm to (current terminal)
        tell myterm
            repeat with mysession in sessions
                tell mysession
                    set the_name to get name
                    set the_output to the_output & the_name & ";"
                end tell
            end repeat
        end tell
    end repeat
end tell

do shell script "echo " & quoted form of the_output
